const CACHE_NAME = 'mobilis-pwa-v1';
const ASSETS_TO_CACHE = [
    '/',
    '/manifest.json',
    '/icon-192.png',
    '/icon-512.png',
    '/images/logo.svg',
    '/terms',
    '/privacy',
    '/security-insurance'
];

// Install Service Worker and cache shell assets
self.addEventListener('install', (event) => {
    event.waitUntil(
        caches.open(CACHE_NAME).then((cache) => {
            return cache.addAll(ASSETS_TO_CACHE).catch((err) => {
                console.warn('PWA: Some assets could not be pre-cached', err);
            });
        })
    );
    self.skipWaiting();
});

// Activate & Cleanup old caches
self.addEventListener('activate', (event) => {
    event.waitUntil(
        caches.keys().then((keys) => {
            return Promise.all(
                keys.map((key) => {
                    if (key !== CACHE_NAME) {
                        return caches.delete(key);
                    }
                })
            );
        })
    );
    self.clients.claim();
});

// Network First with Cache Fallback for dynamic pages
self.addEventListener('fetch', (event) => {
    if (event.request.method !== 'GET') {
        return;
    }

    // Skip admin and download endpoints from caching
    const url = new URL(event.request.url);
    if (url.pathname.startsWith('/admin') || url.pathname.startsWith('/download')) {
        return;
    }

    event.respondWith(
        fetch(event.request)
            .then((networkResponse) => {
                if (networkResponse && networkResponse.status === 200) {
                    const responseToCache = networkResponse.clone();
                    caches.open(CACHE_NAME).then((cache) => {
                        cache.put(event.request, responseToCache);
                    });
                }
                return networkResponse;
            })
            .catch(() => {
                return caches.match(event.request).then((cachedResponse) => {
                    if (cachedResponse) {
                        return cachedResponse;
                    }
                    if (event.request.headers.get('accept')?.includes('text/html')) {
                        return caches.match('/');
                    }
                });
            })
    );
});

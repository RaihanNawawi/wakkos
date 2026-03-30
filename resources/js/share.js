                                document.getElementById('shareBtn').addEventListener('click', async () => {
                                    if (navigator.share) {
                                        try {
                                            await navigator.share({
                                                title: document.title,
                                                text: 'Lihat kost ini:',
                                                url: window.location.href
                                            });
                                        } catch (err) {
                                            // user cancel → aman, tidak perlu alert
                                            console.log('Share cancelled', err);
                                        }
                                    } else {
                                        // fallback minimal
                                        alert('Fitur share tidak didukung di browser ini.');
                                    }
                                });
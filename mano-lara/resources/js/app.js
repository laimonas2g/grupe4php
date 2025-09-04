import 'bootstrap';
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';



window.addEventListener('DOMContentLoaded', _ => {
    const listBin = document.querySelector('[data-list-bin]');
    const bodyBin = document.querySelector('[data-body-bin]');
    const modalBin = document.querySelector('[data-modal-bin]');
    if (!listBin || !bodyBin) return;


    const addlistEvent = _ => {
        const listUrl = listBin.dataset.listUrl;
        getList(listUrl);
    };

    const getList = listUrl => {
        axios.get(listUrl)
            .then(response => {
                if (response.data.success) {
                    listBin.innerHTML = response.data.html;
                    addCreateEvent();
                }
            })
            .catch(error => {
                console.error('Error fetching author list:', error);
            });
    };


    addlistEvent();



    const addCreateEvent = _ => {
        const createBtn = document.querySelector('[data-action="create"]');
        if (!createBtn) return;

        createBtn.addEventListener('click', _ => {
            const url = createBtn.dataset.actionUrl;
            axios.get(url)
                .then(response => {
                    if (response.data.success) {
                        bodyBin.innerHTML = response.data.html;
                        addStoreEvent();
                    }
                })
                .catch(error => {
                    console.error('Error fetching author create form:', error);
                });
        });

        const deleteBtns = listBin.querySelectorAll('[data-action="delete"]');
        deleteBtns.forEach(btn => {
            btn.addEventListener('click', _ => {
                const url = btn.dataset.actionUrl;
                axios.get(url)
                    .then(response => {
                        if (response.data.success) {
                            modalBin.innerHTML = response.data.html;
                            addDeleteEvent();
                        }
                    })
                    .catch(error => {
                        console.error('Error deleting author:', error);
                    });
            });
        });

        const editBtns = listBin.querySelectorAll('[data-action="edit"]');
        editBtns.forEach(btn => {
            btn.addEventListener('click', _ => {
                const url = btn.dataset.actionUrl;
                axios.get(url)
                    .then(response => {
                        if (response.data.success) {
                            bodyBin.innerHTML = response.data.html;
                            addEditEvent();
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching author edit form:', error);
                    });
            });
        });

        const paginator = listBin.querySelector('[data-paginator]');
        if (paginator) {
            const links = paginator.querySelectorAll('a');
            links.forEach(link => {
                link.addEventListener('click', e => {
                    e.preventDefault();
                    const url = link.getAttribute('href');
                    getList(url);
                });
            });
        }
    };

    const addStoreEvent = _ => {
        const storeBtn = document.querySelector('[data-action="store"]');
        const cancelBtn = document.querySelector('[data-action="cancel"]');
        if (!storeBtn) return;

        cancelBtn?.addEventListener('click', _ => {
            bodyBin.innerHTML = '';
        });

        storeBtn.addEventListener('click', _ => {
            const url = storeBtn.dataset.actionUrl;
            const form = bodyBin.querySelector('form');
            if (!form) return;
            const data = {};
            new FormData(form).forEach((value, key) => {
                data[key] = value;
            });
            axios.post(url, data)
                .then(response => {
                    if (response.data.success) {
                        bodyBin.innerHTML = '';
                        addlistEvent();
                    }
                })
                .catch(error => {
                    console.error('Error creating author:', error);
                });
        });
    };

    const addDeleteEvent = _ => {
        const deleteBtn = modalBin.querySelector('[data-action="delete"]');
        if (!deleteBtn) return;

        deleteBtn.addEventListener('click', _ => {
            const url = deleteBtn.dataset.actionUrl;
            axios.delete(url)
                .then(response => {
                    if (response.data.success) {
                        modalBin.innerHTML = '';
                        addlistEvent();
                    }
                })
                .catch(error => {
                    console.error('Error deleting author:', error);
                });
        });

        const cancelBtn = modalBin.querySelectorAll('[data-dismiss="modal"]');
        cancelBtn.forEach(btn => {
            btn.addEventListener('click', _ => {
                modalBin.innerHTML = '';
            });
        });
    };

    const editBtns = listBin.querySelectorAll('[data-action="edit"]');
    editBtns.forEach(btn => {
        btn.addEventListener('click', _ => {
            const url = btn.dataset.actionUrl;
            axios.get(url)
                .then(response => {
                    if (response.data.success) {
                        bodyBin.innerHTML = response.data.html;
                        addStoreEvent();
                    }
                })
                .catch(error => {
                    console.error('Error fetching author edit form:', error);
                });
        });
    });

    const addEditEvent = _ => {
        const updateBtn = document.querySelector('[data-action="update"]');
        const cancelBtn = document.querySelector('[data-action="cancel"]');
        if (!updateBtn) return;

        cancelBtn?.addEventListener('click', _ => {
            bodyBin.innerHTML = '';
        });

        updateBtn.addEventListener('click', _ => {
            const url = updateBtn.dataset.actionUrl;
            const form = bodyBin.querySelector('form');
            if (!form) return;
            const data = {};
            new FormData(form).forEach((value, key) => {
                data[key] = value;
            });
            axios.put(url, data)
                .then(response => {
                    if (response.data.success) {
                        bodyBin.innerHTML = '';
                        addlistEvent();
                    }
                })
                .catch(error => {
                    console.error('Error updating author:', error);
                });
        });
    };

});
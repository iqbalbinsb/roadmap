window.FEEDBACK = {
    debug: false,

    settings: {
        url: '{{ $url }}',
        template: `{!! $template !!}`,
        css: `{{ $css }}`
    },

    data: {
        open: false,
    },

    init: () => {
        document.body.innerHTML += FEEDBACK.settings.template;

        FEEDBACK.registerModalActions();
    },

    registerModalActions: () => {
        document.getElementById('openButton').addEventListener('click', (event) => {
            FEEDBACK.toggleModal();
        });

        document.getElementById('closeButton').addEventListener('click', (event) => {
            FEEDBACK.toggleModal();
        })
    },

    send: async (data) => {
        await fetch(FEEDBACK.settings.url, {
            method: 'POST',
            keepalive: true,
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        })
            .then((response) => response.json())
    },

    toggleModal: () => {
        if (FEEDBACK.data.open) {
            document.getElementById('openButton').classList.remove('rm-f-hidden');
            document.getElementById('feedbackModal').classList.add('rm-f-hidden');
        } else {
            document.getElementById('openButton').classList.add('rm-f-hidden');
            document.getElementById('feedbackModal').classList.remove('rm-f-hidden');
        }

        FEEDBACK.data.open = !FEEDBACK.data.open;
    }
};

document.addEventListener('DOMContentLoaded', (e) => {
    window.FEEDBACK.init();
});


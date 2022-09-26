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
        });

        document.getElementById('submitButton').addEventListener('click', (event) => {
            event.preventDefault();

            const form = document.getElementById('feedbackForm');
            const formData = new FormData(form);

            FEEDBACK.send({
                email: formData.get('email'),
                feedback: formData.get('feedback')
            });
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
            document.getElementById('openButton').classList.remove('roadmap-feedback-hidden');
            document.getElementById('feedbackModal').classList.add('roadmap-feedback-hidden');
        } else {
            document.getElementById('openButton').classList.add('roadmap-feedback-hidden');
            document.getElementById('feedbackModal').classList.remove('roadmap-feedback-hidden');
        }

        FEEDBACK.data.open = !FEEDBACK.data.open;
    }
};

document.addEventListener('DOMContentLoaded', (e) => {
    window.FEEDBACK.init();
});


window.FEEDBACK = {
    debug: false,

    shadowRoot: null,

    settings: {
        url: '{{ $url }}',
        baseTemplate: `{!! $baseTemplate !!}`,
        template: `{!! $template !!}`,
    },

    data: {
        open: false,
    },

    init: () => {
        document.body.innerHTML += FEEDBACK.settings.baseTemplate;
        FEEDBACK.shadowRoot = document.querySelector('feedback-window').attachShadow({ mode: 'open'})
        FEEDBACK.shadowRoot.innerHTML = FEEDBACK.settings.template;

        FEEDBACK.registerModalActions();
    },

    registerModalActions: () => {
        FEEDBACK.shadowRoot.getElementById('openButton').addEventListener('click', (event) => {
            FEEDBACK.toggleModal();
        });

        FEEDBACK.shadowRoot.getElementById('closeButton').addEventListener('click', (event) => {
            FEEDBACK.toggleModal();
        });

        FEEDBACK.shadowRoot.getElementById('submitButton').addEventListener('click', (event) => {
            event.preventDefault();

            const form = FEEDBACK.shadowRoot.getElementById('feedbackForm');
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
            FEEDBACK.shadowRoot.getElementById('openButton').classList.remove('roadmap-feedback-hidden');
            FEEDBACK.shadowRoot.getElementById('feedbackModal').classList.add('roadmap-feedback-hidden');
        } else {
            FEEDBACK.shadowRoot.getElementById('openButton').classList.add('roadmap-feedback-hidden');
            FEEDBACK.shadowRoot.getElementById('feedbackModal').classList.remove('roadmap-feedback-hidden');
        }

        FEEDBACK.data.open = !FEEDBACK.data.open;
    },
};

document.addEventListener('DOMContentLoaded', (e) => {
    window.FEEDBACK.init();
});


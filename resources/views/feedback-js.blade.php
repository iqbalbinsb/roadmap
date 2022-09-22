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

        FEEDBACK.registerOpenHandler();
    },

    registerOpenHandler: () => {
        document.getElementById('openButton').addEventListener('click', (event) => {
            FEEDBACK.data.open = !FEEDBACK.data.open;
            document.getElementById('openButton').classList.add('hidden');
            document.getElementById('feedbackModal').classList.remove('hidden');
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
};

document.addEventListener('DOMContentLoaded', (e) => {
    window.FEEDBACK.init();
});


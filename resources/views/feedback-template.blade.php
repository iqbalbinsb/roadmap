<style>

</style>

{{ app(Illuminate\Foundation\Vite::class)('resources/css/feedback.css', 'build/feedback') }}

<div class="roadmap-feedback-fixed roadmap-feedback-bottom-[5%] roadmap-feedback-right-[1%] roadmap-feedback-z-[1000]">
    <button
        id="openButton"
        class="roadmap-feedback-absolute roadmap-feedback-bottom-[20px] roadmap-feedback-right-[50px] roadmap-feedback-rounded-full roadmap-feedback-bg-blue-500 roadmap-feedback-shadow-lg roadmap-feedback-shadow-blue-500/50 roadmap-feedback-p-4 roadmap-feedback-w-16 roadmap-feedback-h-16 roadmap-feedback-flex roadmap-feedback-items-center roadmap-feedback-justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             class="roadmap-feedback-w-full roadmap-feedback-text-white">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46"/>
        </svg>
    </button>

    <div id="feedbackModal"
         class="roadmap-feedback-hidden roadmap-feedback-absolute roadmap-feedback-border roadmap-feedback-border-blue-300 roadmap-feedback-bottom-[20px] roadmap-feedback-right-[50px] roadmap-feedback-rounded-lg roadmap-feedback-shadow-2xl roadmap-feedback-shadow-blue-500/50 roadmap-feedback-text-white roadmap-feedback-bg-white roadmap-feedback-p-5 roadmap-feedback-w-96 roadmap-feedback-h-[45rem]">
        <form id="feedbackForm">
            <div class="roadmap-feedback-w-full roadmap-feedback-mb-4">
                <label for="email" class="roadmap-feedback-block roadmap-feedback-font-medium roadmap-feedback-text-black roadmap-feedback-mb-2">Email</label>
                <div class="roadmap-feedback-mt-1">
                    <input type="email" name="email" id="email"
                           class="roadmap-feedback-form-input roadmap-feedback-text-xl roadmap-feedback-text-black roadmap-feedback-w-full roadmap-feedback-rounded-lg roadmap-feedback-border roadmap-feedback-border-gray-600 roadmap-feedback-shadow"
                           placeholder="you@example.com">
                </div>
            </div>
            <div class="roadmap-feedback-w-full">
                <label for="label" class="roadmap-feedback-block roadmap-feedback-font-medium roadmap-feedback-text-black roadmap-feedback-mb-2">Feedback</label>
                <div class="">
                <textarea name="feedback"
                          id="label"
                          rows="5"
                          class="roadmap-feedback-form-textarea roadmap-feedback-text-xl roadmap-feedback-text-black roadmap-feedback-w-full roadmap-feedback-rounded-lg roadmap-feedback-border roadmap-feedback-border-gray-600 roadmap-feedback-shadow"
                          placeholder="Leave your feedback.."></textarea>
                </div>
            </div>

            <div class="roadmap-feedback-flex roadmap-feedback-justify-between">
                <button id="closeButton" type="button" class="roadmap-feedback-text-black">Close</button>
                <button
                    id="submitButton"
                    class="roadmap-feedback-py-2 roadmap-feedback-px-3 roadmap-feedback-bg-blue-500 roadmap-feedback-text-white roadmap-feedback-text-sm roadmap-feedback-font-semibold roadmap-feedback-rounded-md roadmap-feedback-shadow-lg roadmap-feedback-shadow-blue-500/50 focus:roadmap-feedback-outline-none">
                    Send
                </button>
            </div>
        </form>

    </div>
</div>

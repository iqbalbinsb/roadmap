{{ app(Illuminate\Foundation\Vite::class)('resources/css/feedback.css', 'build/feedback') }}

<div class="ignore-css rm-f-fixed rm-f-bottom-[5%] rm-f-right-[1%] rm-f-z-[1000]">
    <button
        id="openButton"
        class="rm-f-absolute rm-f-bottom-[20px] rm-f-right-[50px] rm-f-rounded-full rm-f-bg-blue-500 rm-f-shadow-lg rm-f-shadow-blue-500/50 rm-f-p-4 rm-f-w-16 rm-f-h-16 rm-f-flex rm-f-items-center rm-f-justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             class="rm-f-w-full rm-f-text-white">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46"/>
        </svg>
    </button>

    <div id="feedbackModal"
         class="rm-f-hidden rm-f-absolute rm-f-border rm-f-border-blue-300 rm-f-bottom-[20px] rm-f-right-[50px] rm-f-rounded-lg rm-f-shadow-2xl rm-f-shadow-blue-500/50 rm-f-text-white rm-f-bg-white rm-f-p-5 rm-f-w-96 rm-f-h-[45rem]">
        <div class="rm-f-w-full rm-f-mb-4">
            <label for="email" class="rm-f-block rm-f-font-medium rm-f-text-black rm-f-mb-2">Email</label>
            <div class="ignore-css rm-f-mt-1">
                <input type="email" name="email" id="email"
                       class="rm-f-form-input rm-f-text-xl rm-f-text-black rm-f-w-full rm-f-rounded-lg rm-f-border rm-f-border-gray-600 rm-f-shadow"
                       placeholder="you@example.com">
            </div>
        </div>
        <div class="ignore-css rm-f-w-full">
            <label for="label" class="ignore-css rm-f-block rm-f-font-medium rm-f-text-black rm-f-mb-2">Feedback</label>
            <div class="">
                <textarea name="feedback"
                          id="label"
                          rows="5"
                          class="rm-f-form-textarea rm-f-text-xl rm-f-text-black rm-f-w-full rm-f-rounded-lg rm-f-border rm-f-border-gray-600 rm-f-shadow"
                          placeholder="Leave your feedback.."></textarea>
            </div>
        </div>

        <div class="flex justify-between">
            <button id="closeButton" class="rm-f-text-black">Close</button>
            <button
                class="rm-f-py-2 rm-f-px-3 rm-f-bg-blue-500 rm-f-text-white rm-f-text-sm rm-f-font-semibold rm-f-rounded-md rm-f-shadow-lg rm-f-shadow-blue-500/50 focus:rm-f-outline-none">
                Send
            </button>
        </div>
    </div>
</div>

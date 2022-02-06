<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 pt-10">
        <li
            v-for="flink in flinks"
            :key="flink.name"
            class="
                col-span-1 shadow p-2
                dark:bg-gray-800 bg-no-repeat bg-right bg-contain bg-origin-content
                border border-2 border-dashed border-gray-500 dark:border-gray-400
                "
            :class="flink.classes"
            :style="`background-image: url('${flink.logo}')`"
            >
            <a :href="flink.url" target="_blank">
                <div class="w-full flex items-center justify-between p-6 space-x-6">
                    <div class="flex-1 truncate">
                        <div class="flex items-center space-x-3">
                            <h3 class="text-gray-900 dark:text-gray-200 text-lg font-medium truncate content-center">{{ flink.name }}</h3>
                        </div>
                    </div>
                </div>
            </a>
        </li>
    </ul>
</template>

<script>

const flinks = [
    {
        name: 'Heroku',
        classes: 'bg-purple-300 dark:bg-purple-500 bg-blend-multiply',
        url: 'https://dashboard.heroku.com',
        logo: '/images/heroku-logo-white.png',
    },
    {
        name: 'GitHub.com/F+L',
        classes: 'bg-gray-300 dark:bg-gray-500',
        url: 'https://github.com/founderandlightning',
        logo: '/images/github-logo.png',
    },
    {
        name: 'Reviewee',
        classes: 'bg-orange-200 dark:bg-orange-600',
        url: 'https://app.reviewee.it',
        logo: '/images/reviewee-logo.png',
    }
]

export default {
    components: {

    },
    setup() {
        return {
            flinks,
        }
    },
}
</script>

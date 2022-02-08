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
        name: 'Heroku Dashboard',
        classes: 'bg-purple-300 dark:bg-purple-500 bg-blend-multiply',
        url: 'https://dashboard.heroku.com',
        logo: '/images/heroku-logo-white.png',
    },
    {
        name: 'GitHub: F+L',
        classes: 'bg-gray-300 dark:bg-gray-500',
        url: 'https://github.com/founderandlightning',
        logo: '/images/github-logo.png',
    },
    {
        name: 'Reviewee',
        classes: 'bg-orange-200 dark:bg-orange-600',
        url: 'https://app.reviewee.it',
        logo: '/images/reviewee-logo.png',
    },
    {
        name: 'Coding Guidelines',
        classes: 'bg-gray-300 dark:bg-gray-500',
        url: 'https://github.com/founderandlightning/coding-guidelines/',
        logo: '/images/github-logo.png',
    },
    {
        name: 'Circle CI Dashboard',
        classes: 'bg-green-300 dark:bg-green-700 bg-blend-multiply',
        url: 'https://app.circleci.com/',
        logo: '/images/circleci-logo.jpg',
    },
    {
        name: 'AWS Console',
        classes: 'bg-orange-300 dark:bg-orange-500 bg-blend-multiply',
        url: 'https://console.aws.amazon.com/console/home',
        logo: '/images/aws-logo.png',
    },
    {
        name: 'GCP Console',
        classes: 'bg-blue-300 dark:bg-blue-700',
        url: 'https://console.cloud.google.com/home/dashboard',
        logo: '/images/gcp-logo.png',
    },
    {
        name: 'Rollbar',
        classes: 'bg-blue-200 dark:bg-blue-900',
        url: 'https://rollbar.com/',
        logo: '/images/rollbar-logo.png',
    },
    {
        name: 'Landing Page Boilerplate',
        classes: 'bg-pink-300 dark:bg-pink-700',
        url: 'https://github.com/founderandlightning/landing-page-boilerplate',
        logo: '/images/figma-logo.png',
    },
    {
        name: 'Laravel Boilerplate',
        classes: 'bg-red-300 dark:bg-red-400',
        url: 'https://github.com/founderandlightning/fl-laravel_boilerplate',
        logo: '/images/laravel-logo.png',
    },
    {
        name: 'Node TS Boilerplate',
        classes: 'bg-green-200 dark:bg-green-500',
        url: 'https://github.com/founderandlightning/fl-node-ts-boilerplate',
        logo: '/images/node-js-logo.png',
    },
    {
        name: 'React Boilerplate',
        classes: 'bg-cyan-200 dark:bg-cyan-700',
        url: 'https://github.com/founderandlightning/react-boilerplate',
        logo: '/images/react-logo.png',
    },
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

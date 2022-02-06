<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 pt-10">
        <li
            v-for="flink in flinks"
            :key="flink.name"
            class="col-span-1 shadow divide-y divide-gray-200 dark:bg-gray-800 bg-no-repeat bg-right bg-contain"
            :class="flink.classes"
            :style="`background-image: url('${flink.logo}')`"
            >
            <div class="w-full flex items-center justify-between p-6 space-x-6">
                <div class="flex-1 truncate">
                    <div class="flex items-center space-x-3">
                        <h3 class="text-gray-900 dark:text-gray-200 text-sm font-medium truncate">{{ flink.name }}</h3>
                    </div>
                </div>
            </div>
<!--            <img class="h-12 bg-gray-300 flex-shrink-0 dark:bg-gray-400" :src="" alt="" />-->
        </li>
    </ul>
</template>

<script>

const flinks = [
    {
        name: 'Heroku',
        tag: 'DevOps',
        classes: 'bg-purple-300 dark:bg-purple-500',
        url: 'https://dashboard.heroku.com',
        logo: '/images/heroku-logo.png',
    },
    // More people...
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

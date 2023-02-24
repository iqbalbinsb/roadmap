<template>
    <li class="bg-white rounded-md p-2">
        <div class="flex justify-between mb-2">
            <p class="font-bold">{{ name }}</p>
            <p class="text-gray-600 text-sm">{{ date }}</p>
        </div>

        <div>
            <p class="text-gray-600 text-sm">{{ description }}</p>
        </div>
    </li>
</template>

<script>
export default {
    name: "ReleaseItem",
    props: {
        name: {},
        date: {},
        description: {},
    },
}
</script>

<style scoped>

</style>

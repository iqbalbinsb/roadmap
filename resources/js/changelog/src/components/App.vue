<template>
    <div class="bg-gray-200 absolute bottom-2 right-2 max-w-[300px] max-h-[500px] overflow-hidden rounded-lg border flex flex-col">
        <div class="flex items-center justify-between p-2">
            <p class="text-xl font-bold">Changelog</p>
        </div>

        <div class="overflow-y-scroll flex-1 h-full pb-2">

            <ReleaseList>
                <ReleaseItem
                    name="v1.1.0"
                    date="vandaag"
                    description="Sit incididunt elit aliqua nisi cillum. Dolor qui et dolore sint reprehenderit labore reprehenderit consectetur. Aute magna duis incididunt incididunt pariatur. Eiusmod dolore enim eu duis id. Reprehenderit veniam amet voluptate Lorem occaecat consectetur id. Lorem officia Lorem exercitation dolor reprehenderit dolor pariatur nostrud eiusmod amet commodo. Velit consequat velit nostrud ex velit aute qui do eiusmod ex. Irure ut ut labore laboris."
                />

                <ReleaseItem
                    name="v1.0.0"
                    date="2 dagen geleden"
                    description="Sit incididunt elit aliqua nisi cillum. Dolor qui et dolore sint reprehenderit labore reprehenderit consectetur. Aute magna duis incididunt incididunt pariatur. Eiusmod dolore enim eu duis id. Reprehenderit veniam amet voluptate Lorem occaecat consectetur id. Lorem officia Lorem exercitation dolor reprehenderit dolor pariatur nostrud eiusmod amet commodo. Velit consequat velit nostrud ex velit aute qui do eiusmod ex. Irure ut ut labore laboris."
                />
            </ReleaseList>

        </div>
    </div>
</template>

<script>
import ReleaseList from "./ReleaseList.vue";
import ReleaseItem from "./ReleaseItem.vue";

export default {
    name: "App",
    components: {ReleaseItem, ReleaseList}
}
</script>

<style scoped>
</style>

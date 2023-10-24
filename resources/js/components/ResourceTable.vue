<template>

    <div class="overflow-x-auto bg-white dark:bg-gray-800 rounded h-[calc(100%-36px)]">

        <table
            v-if="resources.length > 0"
            class="w-full divide-y divide-gray-100 dark:divide-gray-700"
            data-testid="resource-table">

            <ResourceTableHeader :should-show-column-borders="shouldShowColumnBorders" :fields="fields"/>

            <tbody class="divide-y divide-gray-100 dark:divide-gray-700">

                <ResourceTableRow
                    :should-show-column-borders="shouldShowColumnBorders"
                    v-for="(resource, index) in resources"
                    :key="`${ resource.attribute }-items-${ index }`"
                    :resource="resource"/>

            </tbody>

        </table>

    </div>


</template>

<script>

    import ResourceTableRow from './ResourceTableRow2.vue'
    import ResourceTableHeader from './ResourceTableHeader.vue'

    export default {
        components: { ResourceTableHeader, ResourceTableRow },
        props: {
            shouldShowColumnBorders: Boolean,
            fields: Object,
            resources: { default: [] },
        },
    }

</script>

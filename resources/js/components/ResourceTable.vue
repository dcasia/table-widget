<template>

    <div class="overflow-hidden overflow-x-auto relative">

        <table
            v-if="resources.length > 0"
            class="w-full divide-y divide-gray-100 dark:divide-gray-700"
            data-testid="resource-table">

            <ResourceTableHeader :fields="fields"/>

            <tbody class="divide-y divide-gray-100 dark:divide-gray-700">

                <ResourceTableRow
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
            fields: Object,
            resources: { default: [] },
        },

        mounted() {
            console.log(this.resources)
        },
    }

</script>

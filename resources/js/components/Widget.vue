<template>

    <Card class="table-widget min-h-[auto] overflow-hidden p-1 flex items-center">

        <LoadingView :loading="isLoading" :class="{ 'h-full': !isLoading }" class="w-full overflow-hidden rounded">

            <div class="p-2 text-sm font-bold" v-if="card.title">
                {{ card.title }}
            </div>

            <ResourceTable
                :shouldShowColumnBorders="false"
                :fields="resources[ 0 ].fields ?? []"
                :resources="resources"/>

        </LoadingView>

    </Card>

</template>

<script>

    import ResourceTable from './ResourceTable.vue'

    export default {
        components: { ResourceTable },
        props: { card: Object },
        computed: {
            resources() {
                return this.value.map(fields => ({ fields }))
            },
        },
    }

</script>

<style lang="scss">

    .table-widget {
        @apply bg-gray-200 dark:bg-gray-700 #{!important};
    }

</style>

<template>

    <Card class="table-widget min-h-[auto] overflow-hidden p-1">

        <LoadingView :loading="isLoading" class="w-full h-full overflow-hidden rounded">
            <div class="p-2 text-base font-bold">Traffic Sources</div>
            <ResourceTable :fields="card.fields" :resources="resources"/>
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
                return this.card.value.map(attributes => {
                    return {
                        fields: this.card.fields.map(field => ({
                            ...field, value: attributes[ field.attribute ],
                        })),
                    }
                })
            },
        },
    }

</script>

<style lang="scss">

    .table-widget {
        @apply bg-gray-700 #{!important};
    }

</style>

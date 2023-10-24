<template>

    <thead class="bg-gray-50 dark:bg-gray-800">

        <tr>

            <th v-for="(field, index) in fields" :key="field.uniqueKey"
                class="uppercase text-gray-500 text-xxs tracking-wide py-2 sticky top-0 bg-gray-50 dark:bg-gray-800"
                :class="{
                    [`text-${field.textAlign}`]: true,
                    'border-r border-gray-200 dark:border-gray-600': shouldShowColumnBorders,
                    'px-6': index === 0 && !false,
                    'px-2': index !== 0 || false,
                    'whitespace-nowrap': true,
                }">

                <div>{{ field.indexName }}</div>

            </th>

        </tr>

    </thead>

</template>

<script>

    export default {
        props: {
            shouldShowColumnBorders: Boolean,
            fields: {
                type: [ Object, Array ],
            },
        },
    }

</script>

<style lang="scss">

    .table-widget {

        ::-webkit-scrollbar {
            width: 20px;
            @apply bg-transparent;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 20px;
            border: 6px solid transparent;
            background-clip: content-box;

            @apply bg-gray-200;
        }

        ::-webkit-scrollbar-thumb:hover {
            @apply bg-gray-300;
        }

        ::-webkit-scrollbar-corner {
            @apply bg-white;
        }

    }

    .dark .table-widget {

        ::-webkit-scrollbar-thumb {
            @apply bg-gray-700;
        }

        ::-webkit-scrollbar-thumb:hover {
            @apply bg-gray-600;
        }

        ::-webkit-scrollbar-corner {
            @apply bg-gray-800;
        }

    }

</style>

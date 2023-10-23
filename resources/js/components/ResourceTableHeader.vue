<template>

    <thead class="bg-gray-50 dark:bg-gray-800">

    <tr>

        <th v-for="(field, index) in fields" :key="field.uniqueKey"
            class="uppercase text-gray-500 text-xxs tracking-wide py-2"
            :class="{
              [`text-${field.textAlign}`]: true,
              'border-r border-gray-200 dark:border-gray-600': shouldShowColumnBorders,
              'px-6': index == 0 && !shouldShowCheckboxes,
              'px-2': index != 0 || shouldShowCheckboxes,
              'whitespace-nowrap': !field.wrapping,
            }">

            <SortableIcon
                @sort="requestOrderByChange(field)"
                @reset="resetOrderBy(field)"
                :resource-name="resourceName"
                :uri-key="field.sortableUriKey"
                v-if="sortable && field.sortable">

                {{ field.indexName }}

            </SortableIcon>

            <span v-else>{{ field.indexName }}</span>

        </th>

    </tr>

    </thead>

</template>

<script>

    export default {
        props: {
            fields: {
                type: [ Object, Array ],
            },
        },
    }

</script>

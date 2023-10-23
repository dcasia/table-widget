<template>

    <tr class="group" :class="{ 'divide-x divide-gray-100 dark:divide-gray-700': shouldShowColumnBorders }">

        <td v-for="(field, index) in resource.fields"
            :key="field.uniqueKey"
            :class="{
                'px-6': index === 0 && !shouldShowCheckboxes,
                'px-2': index !== 0 || shouldShowCheckboxes,
                'py-2': !shouldShowTight,
                'whitespace-nowrap': !field.wrapping,
                'cursor-pointer': clickableRow,
            }"
            class="dark:bg-gray-800 group-hover:bg-gray-50 dark:group-hover:bg-gray-900">

            <component
                :is="'index-' + field.component"
                :class="`text-${field.textAlign}`"
                :field="field"
                :resource="resource"
                :resource-name="resourceName"
                :via-resource="viaResource"
                :via-resource-id="viaResourceId"/>

        </td>

    </tr>

</template>

<script>

    export default {
        props: [
            'resource',
        ],
    }

</script>

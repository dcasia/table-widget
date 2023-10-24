<template>

    <tr class="group" :class="{ 'divide-x divide-gray-100 dark:divide-gray-700': shouldShowColumnBorders }">

        <td v-for="(field, index) in resource.fields"
            :key="field.uniqueKey"
            :class="{
                'px-6': index === 0 && !false,
                'px-2': index !== 0 || false,
                'py-2': !false,
                'whitespace-nowrap': !false,
                'cursor-pointer': false,
            }"
            class="dark:bg-gray-800 group-hover:bg-gray-50 dark:group-hover:bg-gray-900">

            <component
                :is="`index-${ field.component }`"
                :class="`text-${ field.textAlign }`"
                :field="field"
                :resource="resource"/>

        </td>

    </tr>

</template>

<script>

    export default {
        props: [
            'resource', 'shouldShowColumnBorders'
        ],
    }

</script>

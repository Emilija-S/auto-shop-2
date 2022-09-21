<template>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Year</th>
                <th></th>
                <th></th>
            </tr>
            <tr v-for="manufacturer in manufacturers.data">
                <td>
                    {{ manufacturer.id }}
                </td>
                <td>
                    {{ manufacturer.name }}
                </td>
                <td>
                    {{ manufacturer.establishment_year }}
                </td>
                <td>
                    <Link :href="route('manufacturers.edit', manufacturer)">
                        EDIT
                    </Link>
                </td>
                <td>
                    <Link :href="route('manufacturers.destroy', manufacturer.id)" method="DELETE">
                        DELETE
                    </Link>
                </td>
            </tr>
        </table>
    </div>
</template>

<script>
export default {
    name: "Index",
    props: {
        manufacturers: Array
    }
}
</script>

<style scoped>

</style>

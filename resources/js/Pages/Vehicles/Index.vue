<template>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Model</th>
                <th>Chassis number</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            <tr v-for="vehicle in vehicles.data">
                <td>
                    {{ vehicle.id }}
                </td>
                <td>
                    {{ vehicle.vehicle_model.name }}
                </td>
                <td>
                    {{ vehicle.chassis_number }}
                </td>
                <td>
                    <Link :href="route('vehicles.edit', vehicle)">
                        EDIT
                    </Link>
                </td>
                <td>
                    <Link :href="route('vehicles.destroy', vehicle.id)" method="DELETE">
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
        vehicles: Array
    }
}
</script>

<style scoped>

</style>

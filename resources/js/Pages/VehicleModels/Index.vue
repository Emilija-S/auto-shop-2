<template>
    <div>
        <table>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Manufacturer</th>
                <th scope="col">VEHICLES</th>
                <th>EDIT</th>
                <th scope="col">DELETE</th>
            </tr>
            <tr v-for="vehicle_model in vehicle_models.data">
                <td>
                    {{ vehicle_model.id }}
                </td>
                <td>
                    {{ vehicle_model.manufacturer.name }}
                </td>
                <td>
                    <div v-for="vehicle in vehicle_model.vehicles">
                        <span>{{ vehicle.chassis_number }}</span>
                        <img :src="vehicle.image" width="60" height="60" class="d-inline p-3">

                    </div>
                </td>
                <td>
                    <Link :href="route('vehicle-models.edit', vehicle_model.id)">
                        EDIT
                    </Link>
                </td>
                <td>
                    <Link :href="route('vehicle-models.destroy', vehicle_model.id)" method="DELETE">
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
        vehicle_models: Array
    }
}
</script>

<style scoped>

</style>

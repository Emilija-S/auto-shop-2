<template>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Manufacturer</th>
                <th>VEHICLES</th>
                <th></th>
            </tr>
            <tr v-for="vehicle_model in vehicle_models.data">
                <td>
                    {{ vehicle_model.id }}
                </td>
                <td>
                    {{ vehicle_model.manufacturer.name }}
                </td>
                <td v-for="vehicle in vehicle_model.vehicles">
                    <span>{{ vehicle.chassis_number }}</span>
                    <img :src="vehicle.image" width="60" height="60" class="d-inline p-3">
<!--                    <Link :href="route('manufacturers.edit', manufacturer)">-->
<!--                        EDIT-->
<!--                    </Link>-->
                </td>
                <td>
<!--                    <Link :href="route('manufacturers.destroy', manufacturer.id)" method="DELETE">-->
<!--                        DELETE-->
<!--                    </Link>-->
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

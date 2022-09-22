<template>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Model</th>
                <th>Chassis number</th>
                <th></th>
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
        vehicles: Array
    }
}
</script>

<style scoped>

</style>

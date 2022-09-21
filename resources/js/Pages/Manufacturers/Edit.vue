<template>
    <form @submit.prevent="submit">
        <div>
            <input type="text" id="name" v-model="form.name">
        </div>
        <div>
            <input type="text" id="establishment_year" v-model="form.establishment_year">
        </div>
        <button type="submit">
            SAVE
        </button>
    </form>
</template>

<script>
export default {
    name: "Edit",
    props: {
        manufacturer: Object
    },
    data() {
        return {
            form: this.$inertia.form({
                name: this.manufacturer.name,
                establishment_year: this.manufacturer.establishment_year,
            })
        }
    },
    methods: {
        submit() {
            this.$inertia.put(route('manufacturers.update', this.manufacturer), this.form);
        }
    }
}
</script>

<style scoped>

</style>

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
    name: "Create",
    data() {
        return {
            form: this.$inertia.form({
                name: '',
                establishment_year: ''
            })
        }
    },
    methods: {
        submit() {
            this.$inertia.post(route('manufacturers.store'), this.form, {
                onSuccess: () => {
                    this.form.reset();
                }
            });
        }
    }
}
</script>

<style scoped>

</style>

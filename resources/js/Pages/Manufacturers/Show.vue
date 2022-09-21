<template>
    <div>
        {{manufacturer.id}}
        {{manufacturer.name}}
        {{manufacturer.establishment_year}}
    </div>
</template>

<script>
export default {
    name: "Show",
    props: {
        manufacturer: Object
    }
}
</script>

<style scoped>

</style>

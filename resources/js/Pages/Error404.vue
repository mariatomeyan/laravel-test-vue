<template>
<div>
    Not found page will be here
</div>
</template>
<script>
import api from '../Services/api.js'
export default {
    name: "Error404",
    created() {
        let path = this.$route.params.pathMatch.replace(/[^\w\s]/gi, '')
        this.isRouteExistInBackend(path)
    },
    methods: {
        isRouteExistInBackend(routeName) {
            var route = '/route/' + routeName
            api.get(route).then(res => {
                if(res.data.success === routeName )
                    window.location.reload()
            })
        }
    }
}
</script>

<style scoped>

</style>

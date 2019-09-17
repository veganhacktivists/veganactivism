<template>

    <div class="row">

        <div v-for="org in data" class="col-md-6 col-lg-6">
            <div class="card my-3 border-0">
                <img :src="org.image_card_url" class="card-img-top" :alt="org.title">
                <div class="card-body">
                    <h4 class="card-title"><a :href="org.show_route" class="text-dark font-weight-bold">{{ org.title }}</a></h4>
                    <p class="card-text">{{ org.card_content}}</p>

                    <div class="my-2 mx-1 row">
                        <a :href="org.show_route" class="btn btn-dark py-1 "><i class="fas fa-info-circle mr-1"></i>Learn More</a>
                        <a :href="org.website_url" target="_blank" class="btn btn-danger ml-3 py-1"><i class="fas fa-link mr-1"></i>Visit Website</a>
                    </div>
                    <p class="card-text"><small class="text-muted">STREET ACTIVISM - </small> <small><strong>400</strong> Activists clicked on this.</small></p>
                </div>
            </div>
        </div>


    </div>


</template>

<script>
    export default {
        name: "organization",

        props: ['data']
    }
</script>

<style scoped>

</style>

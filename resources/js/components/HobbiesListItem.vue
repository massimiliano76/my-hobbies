<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <img :src="$store.getters.getProfileLink(hobby.author)" class="rounded-circle" width="30" height="30" />
                </div>
                <div class="col">
                    <h6>
                        <a :href="`/users/${hobby.author.nickname}`">
                            {{hobby.author.name}} @{{hobby.author.nickname}}
                        </a>
                    </h6>

                    <a :href="`/categories/${category.id}`">
                        {{ category.icon }}
                        {{ category.name }}
                    </a>

                    <h3>{{ hobby.title }}</h3>
                    <p>{{ hobby.date }}</p>
                    <p>{{ hobby.description }}</p>

                    <a :href="`/hobby/${hobby.id}`">
                        <b>{{ hobby.commentsNb }}</b> comments
                    </a>
                </div>
                <div class="col-auto">
                    <h3>{{ hobby.rating }}/10</h3>
                </div>
            </div>
        </div>
        <hr>
    </div>
</template>

<script>
export default {
    props: ['hobby'],

    computed: {
        category() {
            return this.$store.getters.getCategory(this.hobby.category_id)
        }
    }
}
</script>

<template>
    <a class="dropdown-item" href="#" >
        {{ commenter }} - {{ postTitle }}
    </a>
</template>

<script>
export default {
    props: ['notification'],
    computed: {
        commenter () {
            return this.notification.comment.user.name;
        },
        postTitle () {
            return this.notification.comment.post.title;
        }
    }
}
</script>
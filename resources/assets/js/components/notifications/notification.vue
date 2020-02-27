<template>
    <a class="dropdown-item" href="#" >
        {{ notification.comment.post.title }}
    </a>
</template>

<script>
export default {
    props: ['notification']
}
</script>
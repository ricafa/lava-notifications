<template>
    <div>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Notificações ({{ notifications.length}}) <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <notification
                    v-for="notification in notifications" 
                    :key="notification.id"
                    :notification ="notification.data" >
                </notification>

                <a class="dropdown-item" href="#" >
                    Limpar Notificações
                </a>
            </div>
        </li>
    </div>
</template>

<script>
export default {
    created () {
        this.loadNotifications();
    },
    computed: {
        notifications () {
            return this.notificationsItems;
        }
    },
    data() {
        return {
            notificationsItems: []
        }
    },
    methods: {
        loadNotifications () {
            axios.get('/notifications')
                .then(response => this.notificationsItems = response.data.notifications );
                    //console.log(response.data.notifications[0].data.comment.post.title);
        }
    }
}
</script>
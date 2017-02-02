<template lang="html">

    <div class="chat-composer">

        <input type="text" placeholder="Start typing your message..." v-model="messageText" @keyup.enter="sendMessage">

        <button class="btn btn-primary" @click.prevent="sendMessage">Send</button>

    </div>

</template>


<script>

    export default {

        props: ['currentuser'],

        data() {

            return {

                messageText: ''

            }


        },

        methods: {

            sendMessage(){

                this.$emit('messagesent', {

                    message: this.messageText,
                    user: {

                        name: this.currentuser
                    }
                });

                this.messageText = '';
            }

        }

    }


</script>


<style lang="css">

    .chat-composer{

        margin: 2rem;
        display: flex;
    }

    .chat-composer input {

        border: 1px solid;
        flex: 1 auto;
        padding: 1rem;

    }

    .chat-composer button {


        border-radius: 0;
    }


</style>
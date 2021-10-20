<template>
    <div>
        <base-textarea></base-textarea>
        <base-button :label="'Add Comment'"></base-button>
    </div>
</template>

<script>
import BaseTextarea from "./BaseTextarea";
import BaseButton from "./BaseButton";
export default {
    name: "CommentForm",
    components: {BaseTextarea, BaseButton}
}
</script>

<style scoped>

</style>

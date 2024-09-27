<template>
    <div class="card">
        <DataTable :value="liveUpdates" tableStyle="min-width: 50rem">
            <Column field="position" header="Position"></Column>
            <Column field="name" header="Name"></Column>
            <Column field="time" header="Time"></Column>
        </DataTable>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                liveUpdates: [],
            }
        },
        mounted() {
            window.Echo.channel('live-updates')
                .listen('.liveUpdates', (e) => {
                    this.liveUpdates = e;
                });
        },
    }
</script>
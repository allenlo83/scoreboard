<template>
    <div class="card">
        <DataTable :value="schedules" tableStyle="min-width: 50rem">
            <Column field="season" header="Season"></Column>
            <Column field="date" header="Dates"></Column>
            <Column field="country" header="Country"></Column>
            <Column field="winner" header="Winner"></Column>
        </DataTable>
        <Button :style="{marginTop: '20px'}" label="Refresh" @click="getData" />
    </div>
</template>

<script>
    export default {
        data() {
            return {
                schedules: [],
            }
        },
        methods: {
            getData() {
                axios
                    .get('/api/get-schedules')
                    .then(res => {
                        this.schedules = res.data.data;
                    });
            },
        },
        mounted() {
            this.getData();
        },
    }
</script>
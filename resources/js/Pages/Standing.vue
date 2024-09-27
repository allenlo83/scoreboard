<template>
    <div class="card">
        <DataTable :value="standings" tableStyle="min-width: 50rem">
            <Column field="rank" header="Rank"></Column>
            <Column field="team" header="Team"></Column>
            <Column field="wins" header="Wins"></Column>
            <Column field="podiums" header="Podium"></Column>
        </DataTable>
        <Button :style="{marginTop: '20px'}" label="Refresh" @click="getData" />
    </div>
</template>

<script>
    export default {
        data() {
            return {
                standings: [],
            }
        },
        methods: {
            getData() {
                axios
                    .get('/api/get-standings')
                    .then(res => {
                        this.standings = res.data.data;
                    });
            },
        },
        mounted() {
            this.getData();
        },
    }
</script>
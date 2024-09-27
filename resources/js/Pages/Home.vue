<template>
    <Panel header="F1 Event Dashboard" style="panelStyle">
        <Tabs value="0">
            <TabList>
                <Tab value="0">Schedules</Tab>
                <Tab value="1">Team Standings</Tab>
                <Tab value="2">Live Race Update</Tab>
            </TabList>
            <TabPanels>
                <TabPanel value="0">
                    <Schedule />
                </TabPanel>
                <TabPanel value="1">
                    <Standing />
                </TabPanel>
                <TabPanel value="2">
                    <LiveUpdate />
                </TabPanel>
            </TabPanels>
        </Tabs>
    </Panel>
</template>

<script>
    import Schedule from './Schedule.vue';
    import Standing from './Standing.vue';
    import LiveUpdate from './LiveUpdate.vue';

    export default {
        data() {
            return {
                panelStyle: {
                    marginTop: '100px',
                }
            }
        },
        components: {
            Schedule,
            Standing,
            LiveUpdate,
        },
    }
</script>

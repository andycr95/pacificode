<template>
    <div class="card">
        <div class="card-block">
            <div class="table-responsive dt-responsive">
                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in users" v-bind:key="user.id">
                            <td>{{user.name}}</td>
                            <td>{{user.position}}</td>
                            <td>{{user.office}}</td>
                            <td>{{user.age}}</td>
                            <td>{{user.start_date}}</td>
                            <td>{{user.salary}}</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data: function() {
        return {
                users: [
                    {
                        'id':1,
                        'name':'Omar Nixon',
                        'position':'CEO',
                        'office':'Edinburgh',
                        'age':61,
                        'start_date':'2011/04/25',
                        'salary':'$320,800'
                    },{
                        'id':2,
                        'name':'Tiger Nixon',
                        'position':'System Architect',
                        'office':'Edinburgh',
                        'age':61,
                        'start_date':'2011/04/25',
                        'salary':'$320,800'
                    },{
                        'id':3,
                        'name':'Tiger Dax',
                        'position':'CTO',
                        'office':'Edinburgh',
                        'age':61,
                        'start_date':'2011/04/25',
                        'salary':'$320,800'
                    },{
                        'id':4,
                        'name':'Andy Caicedo',
                        'position':'Developer',
                        'office':'Edinburgh',
                        'age':61,
                        'start_date':'2011/04/25',
                        'salary':'$320,800'
                    },{
                        'id':5,
                        'name':'Edward Valencia',
                        'position':'Developer',
                        'office':'Edinburgh',
                        'age':61,
                        'start_date':'2011/04/25',
                        'salary':'$320,800'
                    }
                ]
            }
        }
    }
</script>

<template>
    <div>
        <h3>
            Room 
        </h3>  
        <button @click="createRoom()">Create Room</button>
        <ul>
            <li 
             class="border-blue-800 border-l-4 bg-blue-100 px-2"
            v-for="(room,roomKey) in room" :key="roomKey">
            <button class="text-red-400" @click="deleteRoom(roomKey)">X</button>
            <button class="text-red-400" @click="editRoom(roomKey)">E</button>
                {{ room.title }},{{  room.floor  }}
            </li>
        </ul>      
    </div>
</template>
<script>
export default {
    data: () => {
    return{
        rooms: []
    }
},
created(){
this.getRooms()
},
methods:{
    getRooms(){
        axios.get('/api/room')
        .then(response =>{
            this.rooms = response.data
        }).catch(response=>{
            console.log(response)
            alert('Error')
        })
    },
    deleteRoom(roomKey){
        axios.delete('/api/room/'+ this.rooms[roomKey].id)
         .then(response =>{
            alert('room deleted!')
            this.rooms.splice(roomKey,1)
        }).catch(response=>{
            console.log(response)
            alert('Error')
        })
    },
    createRoom(){
        let room=prompt('Write Room Number:')
        axios.post('/api/room',{title: room})
         .then(response =>{
            alert('room Created!')
            this.rooms.push(response.data.room)
        }).catch(response=>{
            console.log(response)
            alert('Error')
        })
    
},
editRoom(roomKey){
    let roomDB = this.rooms[roomKey];
    let room=prompt('Write Your room',roomDB.title)
    axios.put('/api/room/'+roomDB.id,{title: room})
         .then(response =>{
            alert('room edited!')
            this.rooms[roomKey].title = room
        }).catch(response=>{
            console.log(response)
            alert('Error')
        })
}
}
}
</script>

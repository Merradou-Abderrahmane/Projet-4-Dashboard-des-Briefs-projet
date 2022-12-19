import React from 'react';
import axios from 'axios';

class TodoListManagement extends React.Component() {
  constructor(props) {
    super(props);
    this.state = {
      tasks: [],
    }
  }

  componentDidMount() {
    axios.get("http://127.0.0.1:8000/api/tasks").then((res) => {
      this.setState({ data: res.data });
  });
  }

  deleteTask(id) {
    axios.delete(`http://127.0.0.1:8000/api/tasks/${id}`).then((response) => {
        this.reload()
    })
}

}

export default TodoListManagement;

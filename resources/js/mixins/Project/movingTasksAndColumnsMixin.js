export default {
    props: {
        column: {
            type: Object,
            required: true
        },
        columnIndex: {
            type: Number,
            required: true
        },
        project: {
            type: Object,
            required: true
        }
    },
    methods: {
        moveTaskOrColumn(transferData) {
            if (transferData.type === 'task') {
                this.moveTask(transferData)
            } else {
                this.moveColumn(transferData)
            }
        },
        moveTask({ fromColumnId, fromTaskId }) {
            this.$store.dispatch("moveTask", {
                url: null,
                payload: {
                    from_column_id: fromColumnId,
                    to_column_id: this.column.id,
                    from_task_id: fromTaskId,
                    to_task_id: this.taskIndex !== undefined ? this.task.id : '-1'
                }
            });
        },
        moveColumn({ fromColumnId }) {
            this.$store.dispatch("moveColumn", {
                url: null,
                payload: {
                    from_column_id: fromColumnId,
                    to_column_id: this.column.id,
                    project_id: this.project.id
                }
            });
        }
    }
}
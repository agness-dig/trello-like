const draggables = document.querySelectorAll('.card')
const containers = document.querySelectorAll('.list-container')

draggables.forEach(draggable => {
  draggable.addEventListener('dragstart', () => {
    draggable.classList.add('dragging')
  })

  draggable.addEventListener('dragend', () => {
    draggable.classList.remove('dragging')
  })
})

containers.forEach(card => {
  card.addEventListener('dragover', e => {
    e.preventDefault()
    const afterElement = getDragAfterElement(card, e.clientY)
    const draggable = document.querySelector('.dragging')
    if (afterElement == null) {
      card.appendChild(draggable)
    } else {
      card.insertBefore(draggable, afterElement)
    }
  })
})

function getDragAfterElement(container, y) {
  const draggableElements = [...container.querySelectorAll('.draggable:not(.dragging)')]

  return draggableElements.reduce((closest, child) => {
    const box = child.getBoundingClientRect()
    const offset = y - box.top - box.height / 2
    if (offset < 0 && offset > closest.offset) {
      return { offset: offset, element: child }
    } else {
      return closest
    }
  }, { offset: Number.NEGATIVE_INFINITY }).element
}


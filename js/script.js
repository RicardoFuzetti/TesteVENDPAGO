const ModalTitulo = {
    open() {
        document.querySelector('.modal-overlay-titulo').classList.add('ativo')
    },

    close() {
        document.querySelector('.modal-overlay-titulo').classList.remove('ativo')
        document.querySelector('.modal-erro-titulo').classList.remove('ativo')
        ModalTitulo.limparCampo()
    },

    titulo: document.getElementById('inputTitulo'),
    genero: document.getElementById('inputGenero'),

    getValues() {
        return {
            titulo: ModalTitulo.titulo.value,
            genero: ModalTitulo.genero.value
        }
    },

    validarCampo() {
        const { titulo, genero } = ModalTitulo.getValues()
        if (titulo.trim() === "" || genero.trim() === "") {
            document.querySelector('.modal-erro-titulo').classList.add('ativo')
        } else {
            console.log("CAMPOS PREENCHIDOS")
        }
    },

    limparCampo() {
        const { titulo, genero } = ModalTitulo.getValues()
        if (titulo.trim() !== "" || genero.trim() !== "") {
            ModalTitulo.titulo.value = ""
            ModalTitulo.genero.value = ""
        } else {
            console.log("CAMPOS VAZIOS")
        }
    }
}

const ModalCliente = {
    open() {
        document.querySelector('.modal-overlay-cliente').classList.add('ativo')
    },

    close() {
        document.querySelector('.modal-overlay-cliente').classList.remove('ativo')
        document.querySelector('.modal-erro-cliente').classList.remove('ativo')
        ModalCliente.limparCampo()
    },

    nome: document.getElementById('inputNome'),
    cpf: document.getElementById('inputCPF'),

    getValues() {
        return {
            nome: ModalCliente.nome.value,
            cpf: ModalCliente.cpf.value
        }
    },

    validarCampo() {
        const { nome, cpf } = ModalCliente.getValues()
        if (nome.trim() === "" || cpf.trim() === "") {
            document.querySelector('.modal-erro-cliente').classList.add('ativo')
        } else {
            console.log("CAMPOS PREENCHIDOS")
        }
    },

    limparCampo() {
        const { nome, cpf } = ModalCliente.getValues()
        if (nome.trim() !== "" || cpf.trim() !== "") {
            ModalCliente.nome.value = ""
            ModalCliente.cpf.value = ""
        } else {
            console.log("CAMPOS VAZIOS")
        }
    }
}
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

    getValues() {
        return {
            titulo: ModalTitulo.titulo.value,
        }
    },

    validarCampo() {
        const { titulo } = ModalTitulo.getValues()
        if (titulo.trim() === "") {
            document.querySelector('.modal-erro-titulo').classList.add('ativo')
        } else {
            console.log("CAMPOS PREENCHIDOS")
        }
    },

    limparCampo() {
        const { titulo } = ModalTitulo.getValues()
        if (titulo.trim() !== "") {
            ModalTitulo.titulo.value = ""
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

const ModalEmprestimo = {
    open() {
        document.querySelector('.modal-overlay-emprestimo').classList.add('ativo')
    },

    close() {
        document.querySelector('.modal-overlay-emprestimo').classList.remove('ativo')
        document.querySelector('.modal-erro-emprestimo').classList.remove('ativo')
        ModalEmprestimo.limparCampo()
    },

    data: document.getElementById('inputData'),

    getValues() {
        return {
            data: ModalEmprestimo.data.value,
        }
    },

    validarCampo() {
        const { data } = ModalEmprestimo.getValues()
        if (data === "") {
            document.querySelector('.modal-erro-emprestimo').classList.add('ativo')
        } else {
            console.log("CAMPOS PREENCHIDOS")
        }
    },

    limparCampo() {
        const { data } = ModalEmprestimo.getValues()
        if (data !== "") {
            ModalEmprestimo.data.value = ""
        } else {
            console.log("CAMPOS VAZIOS")
        }
    }
}
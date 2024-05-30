const user = () => ({
    set_login: () => {
        let c_mod = login_cod_mod.val();
        let params = { action: "set-login", cod_mod: c_mod };

        if (c_mod === "") {
            sw_alert().warning("Ingrese nro DNI!");
            login_cod_mod.focus();
        } else {
            $.post(login_url, params, (response) => {
                console.log(response);
                if (response === "1") {
                    sw_alert().bienvenido();
                } else {
                    sw_alert().error("Nro. DNI incorrecto!");
                }
            }).fail((xhr, status, error) => {
                console.error(xhr, status, error);
            });
        }
    },

    set_logout: () => {
        let params = { action: "set-logout" };
        $.post(login_url, params, () => {
            location.reload();
        });
    },
});

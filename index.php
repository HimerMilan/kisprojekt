<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Regisztráció</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <h2 class="text-center mb-4">Regisztráció</h2>

            <form action="feldolgozas.php" method="POST" id="regForm">

                <div class="mb-3">
                    <label for="nev" class="form-label">Név:</label>

                    <input
                        type="text"
                        class="form-control"
                        id="nev"
                        name="nev"
                        maxlength="255"
                        required
                    >

                    <div class="invalid-feedback">
                        A név nem lehet üres és nem tartalmazhat számot!
                    </div>
                </div>

                <div class="mb-3">
                    <label for="login" class="form-label">Login:</label>

                    <input
                        type="text"
                        class="form-control"
                        id="login"
                        name="login"
                        maxlength="100"
                        required
                    >

                    <div class="invalid-feedback">
                        A login megadása kötelező!
                    </div>
                </div>

                <div class="mb-3">
                    <label for="jelszo" class="form-label">Jelszó:</label>

                    <input
                        type="password"
                        class="form-control"
                        id="jelszo"
                        name="jelszo"
                        maxlength="25"
                        required
                    >

                    <div class="invalid-feedback">
                        A jelszó megadása kötelező!
                    </div>
                </div>

                <div class="mb-3">
                    <label for="szerepkor" class="form-label">Szerepkör:</label>

                    <select
                        class="form-select"
                        id="szerepkor"
                        name="szerepkor"
                        required
                    >
                        <option value="">Válassz szerepkört!</option>
                        <option value="felhasználó">Felhasználó</option>
                        <option value="admin">Admin</option>
                        <option value="karbantartó">Karbantartó</option>
                    </select>

                    <div class="invalid-feedback">
                        Válassz szerepkört!
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Autó:</label>

                    <div>
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="auto"
                                id="autoVan"
                                value="1"
                                required
                            >
                            <label class="form-check-label" for="autoVan">
                                Van
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="auto"
                                id="autoNincs"
                                value="0"
                            >
                            <label class="form-check-label" for="autoNincs">
                                Nincs
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">PC:</label>

                    <div>
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="pc"
                                id="pcVan"
                                value="1"
                                required
                            >
                            <label class="form-check-label" for="pcVan">
                                Van
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="pc"
                                id="pcNincs"
                                value="0"
                            >
                            <label class="form-check-label" for="pcNincs">
                                Nincs
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="mobil" class="form-label">Mobil:</label>

                    <input
                        type="text"
                        class="form-control"
                        id="mobil"
                        name="mobil"
                        maxlength="255"
                        required
                    >

                    <div class="invalid-feedback">
                        A mobiltelefonszám csak számokat és a + / - # jeleket tartalmazhatja!
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>

                    <input
                        type="text"
                        class="form-control"
                        id="email"
                        name="email"
                        maxlength="255"
                        required
                    >

                    <div class="invalid-feedback">
                        Hibás email cím!
                    </div>
                </div>


                <div class="text-center mt-4">

                    <button
                        type="submit"
                        class="btn btn-primary me-2"
                    >
                        Küldés
                    </button>

                    <button
                        type="reset"
                        class="btn btn-secondary"
                    >
                        Mégsem
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

<script src="script.js"></script>

</body>
</html>
<a class="notification-item {{ (is_null($notif->read_at) ? "notification-item-unread" : "notification-item-read") }}" href="{{ route('doctors.profile', [$notif->data["doctor"]["id"], $notif->id]) }}">
    <li class="profile-setting not">
        <div class="not-img">
            <img class="img-circle" src="/profilePics/{{ \App\Http\Controllers\UsuarioController::getProfilePic($notif->data["doctor"]["profile_pic_path"], $notif->data["doctor"]["id_sexo"]) }}">
        </div>
        <div class="not-text">
            ¡{{ $notif->data["doctor"]["nombres"] }} solicita que l{{ ($notif->data["doctor"]["id_sexo"] === 2 ? "a" : "o") }} agregues a tu lista de profesionales de la salud!
        </div>
    </li>
</a>
<a class="notification-item {{ (is_null($notif->read_at) ? "notification-item-unread" : "notification-item-read") }}" href="#" data-uuid="{{ $notif->id }}" onclick="verHora(true, '{{ $notif->data["hora"]["id"] }}', '{{ $notif->id }}');">
    <li class="profile-setting not">
        <div class="not-img"></div>
        <div class="not-text">
            ¡Una de tus horas ha sido reservada!
        </div>
    </li>
</a>
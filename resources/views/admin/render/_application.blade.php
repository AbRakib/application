@forelse ($applications as $item)
<tr class="hover-actions-trigger btn-reveal-trigger position-static">
    <td class="fs-9 align-middle ps-0 py-3">
        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                data-bulk-select-row='{"customer":{"avatar":"/team/32.webp","name":"Carry Anna"},"email":"annac34@gmail.com","city":"Budapest","totalOrders":89,"totalSpent":23987,"lastSeen":"34 min ago","lastOrder":"Dec 12, 12:56 PM"}' />
        </div>
    </td>
    <td class="customer align-middle white-space-nowrap pe-5">
        <a class="d-flex align-items-center text-body-emphasis" href="customer-details.html">
            <div class="avatar avatar-m">
                <img class="rounded-circle" src="{{ asset('assets/img/team/avatar.webp') }}"
                    alt="" />
            </div>
            <p class="mb-0 ms-1 text-body-emphasis fw-bold">{{ $item->first_name }} {{ $item->last_name }}</p>
        </a>
    </td>
    <td
        class="total-orders align-middle white-space-nowrap fw-semibold text-start text-body-highlight">
        {{ $item->referrer_id }}
    </td>
    <td class="email align-middle white-space-nowrap pe-5">
        <a class="fw-semibold" href="mailto:{{ $item->email }}">{{ $item->email }}</a>
    </td>
    <td
        class="total-orders align-middle white-space-nowrap fw-semibold text-end text-body-highlight">
        {{ $item->phone }}
    </td>
    <td class="city align-middle white-space-nowrap text-body-highlight ps-7"> {{ $item->years_experience }} Years</td>
    <td class="last-seen align-middle white-space-nowrap text-body-tertiary text-end">
        {{ $item->skills }}
    </td>
    <td class="last-order align-middle white-space-nowrap text-body-tertiary text-end">
        {{ $item->current_role }}
    </td>
</tr>
@empty
    <tr>
        <td colspan="7">
            <div>No Data Found!!!</div>
        </td>
    </tr>
@endforelse
